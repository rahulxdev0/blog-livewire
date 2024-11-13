<?php

namespace App\Livewire\Admin\Topic;

use App\Models\Topic;
use Livewire\Component;

class InsertTopic extends Component
{
    public $topic_name;
    public $topic_description;

    public function save(){
        $topic = new Topic();
        $topic->topic_name = $this->topic_name;
        $topic->topic_description = $this->topic_description;
        $topic->save();

        $topic->topic_name = '';
        $topic->topic_description = '';

        $this->dispatch('update-kr-do');

        session()->flash('message', 'Topic created successfully');
        // return redirect()->route('topics');
    }

    public function render()
    {
        return view('livewire.admin.topic.insert-topic');
    }
}
