<?php
namespace App\Livewire\Admin\Post;
use Livewire\Attributes\Validate;

use Livewire\WithFileUploads;

use App\Models\Topic;
use App\Models\Post;
use Livewire\Component;

class InsertForm extends Component
{
    use WithFileUploads; 

    #[Validate]
    public $title;
    public $content;
    public $user_id;
    public $topic_id;
    public $views;
    public $likes;
    public $status;
    public $featured_image;

    public function rules(){
        return [
            'title' => 'required|max:255',
            'content' => 'required',
            'topic_id' => 'required|numeric',
            'featured_image' => 'nullable|image|max:2048',
        ];
    }
    public function store(){

        $this->validate();

        // $post = new Post();
        // $post->title = $this->title;
        // $post->content = $this->content;
        // $post->topic_id = $this->topic_id;

        // if($this->featured_image){
        //     $imageName = time(). '.' . $this->featured_image->getClientOriginalExtension();
        //     $this->featured_image->storeAs("images", $imageName, "public");
        //     $post->featured_image = $imageName;
        // }
        // $post->save();
        $postData = [
            'title' => $this->title,
            'content' => $this->content,
            'topic_id' => $this->topic_id,
        ];
    
        if ($this->featured_image) {
            $imageName = now()->timestamp . '.' . $this->featured_image->extension();
            $this->featured_image->storeAs('images', $imageName, 'public');
            $postData['featured_image'] = $imageName;
        }
    
        Post::create($postData);

        $this->reset(["title", "content", "featured_image", "topic_id"]);

        session()->flash('status', "post inserted successfully.");
        // $this->redirect('posts');

        return redirect()->route('post');

    }
    
    public function render()
    {
        $data['topics'] = Topic::all();
        return view('livewire.admin.post.insert-form', $data);
    }
}
