<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;

class NewsController extends Controller
{
    public function index()
    {   
        $news = DB::table('news')
                ->select()
                ->orderBy('updated_at', 'DESC')
                ->paginate(5);

        // dd($news);
        
        return view('pages.backend.news.index', compact('news'));
    }

    public function create()
    {

        $news = DB::table('news')
                ->get();

        return view('pages.backend.news.add', compact('news'));
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

        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        $userId = Auth::user()->id;

        $news = new News;
        $news->user_id = $userId;
        $news->slug = $slug;
        $news->title = $request->title;
        $news->sub_title = $request->sub_title;
        $news->meta_tag = $request->meta_tag;
        $news->meta_description = $request->meta_description;
        $news->description = $request->description;
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();
            $fileName =  date('d-m-Y') . '-' . $request->title . '.' . $extension;
            $file->move(public_path('uploaded-file/news/'), $fileName);
            $news->image_path = $fileName;
        }

        $news->save();

        // News::insert($request->all());

        // dd($request->all());

        // $news = News::Create([

        //     'user_id' => Auth::user()->id,
        //     'slug' => $slug,
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image_path' => $newImageName,
        //     // 'created_at' => DB::raw('now()')

        // ]);

        // dd($news);

        return redirect('news-page')->with('status', 'News was successfully created!');
    }

    public function show($slug)
    {
        $news = DB::table('news')
                ->where('slug', $slug)
                ->first();
        // dd($news);

        return view('pages.backend.news.show')->with('news', News::where('slug', $slug)->first());
    }

    public function edit(Request $request, $id)
    {
        $news = DB::table('news')
            ->where('news_id', $id)
            ->first();

        return view('pages.backend.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
            'description' => 'required|max:255',
            // 'image_path' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        $userId = Auth::user()->id;

        $id = intval($id);
        // dd($id);
        $news = News::find($id);
        $news->user_id = $userId;
        $news->slug = $slug;
        $news->title = $request->title;
        $news->sub_title = $request->sub_title;
        $news->meta_tag = $request->meta_tag;
        $news->meta_description = $request->meta_description;
        $news->description = $request->description;
        if ($request->hasFile('image_path')) 
        {
            $destination = public_path('uploaded-file/news/'.$news->image_path); 
            if(File::exists($destination))
            {    
               File::delete($destination);  
            }
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();
            $fileName =  date('d-m-Y') . '-' . $request->title . '.' . $extension;
            $file->move(public_path('uploaded-file/news/'), $fileName);
            $news->image_path = $fileName;
        } else {
            $fileName = $news->image_path;
          }

        $news->update();

        // dd($request->all());

        return redirect('news-page')->with('status', 'News was successfully updated!');
    }

    public function destroy($id)
    {
        DB::table('news')->where('news_id', $id)->delete();
        return redirect('news-page')->with('status', 'News was successfully deleted!');
    }
}
