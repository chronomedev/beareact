<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;
// use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{
    public function index()
    {   
        $blog = DB::table('blog')
                ->select()
                ->orderBy('updated_at', 'DESC')
                ->paginate(5);

        // dd($blog);
        
        return view('pages.backend.blog.index', compact('blog'));
    }

    public function create()
    {

        $blog = DB::table('blog')
                ->get();

        return view('pages.backend.blog.add', compact('blog'));
    }

    public function store(Request $request)
    {
        // $newImageName = date('d-m-Y') . '-' . $request->title . '.' . $request->image_path->extension();
        // $request->image_path->move(public_path('uploaded-file/image-path'), $newImageName);
        // dd($newImageName);

        $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
            'description' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        $userId = Auth::user()->id;

        $blog = new Blog;
        $blog->user_id = $userId;
        $blog->slug = $slug;
        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->meta_tag = $request->meta_tag;
        $blog->meta_description = $request->meta_description;
        $blog->description = $request->description;
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();
            $fileName =  date('d-m-Y') . '-' . $request->title . '.' . $extension;
            $file->move(public_path('uploaded-file/news/'), $fileName);
            $blog->image_path = $fileName;
        }

        $blog->save();

        // Blog::insert($request->all());

        // dd($request->all());

        // $blog = Blog::Create([

        //     'user_id' => Auth::user()->id,
        //     'slug' => $slug,
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image_path' => $newImageName,
        //     // 'created_at' => DB::raw('now()')

        // ]);

        // dd($blog);

        return redirect('news-page')->with('status', 'News was successfully created!');
    }

    public function show($slug)
    {
        $blog = DB::table('blog')
                ->where('slug', $slug)
                ->first();
        // dd($blog);

        return view('pages.backend.blog.show')->with('blog', Blog::where('slug', $slug)->first());
    }

    public function edit(Request $request, $id)
    {
        $blog = DB::table('blog')
            ->where('blog_id', $id)
            ->first();

        return view('pages.backend.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
            'description' => 'required|max:255',
            // 'image_path' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        $userId = Auth::user()->id;

        $id = intval($id);
        // dd($id);
        $blog = Blog::find($id);
        $blog->user_id = $userId;
        $blog->slug = $slug;
        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->meta_tag = $request->meta_tag;
        $blog->meta_description = $request->meta_description;
        $blog->description = $request->description;
        if ($request->hasFile('image_path')) 
        {
            $destination = public_path('uploaded-file/news/'.$blog->image_path); 
            if(File::exists($destination))
            {    
               File::delete($destination);  
            }
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();
            $fileName =  date('d-m-Y') . '-' . $request->title . '.' . $extension;
            $file->move(public_path('uploaded-file/news/'), $fileName);
            $blog->image_path = $fileName;
        } else {
            $fileName = $blog->image_path;
          }

        $blog->update();

        // dd($request->all());

        return redirect('news-page')->with('status', 'News was successfully updated!');
    }

    public function destroy($id)
    {
        DB::table('blog')->where('blog_id', $id)->delete();
        return redirect('news-page')->with('status', 'News was successfully deleted!');
    }
}
