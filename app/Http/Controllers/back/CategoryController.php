<?php

namespace App\Http\Controllers\back;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id', 'DESC')->paginate(20);
        return view('back.categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'فیلد عنوان را وارد کنید',
            'slug.unique' => 'نام مستعار تکراری است',
            'slug.required' => 'نام مستعار اجباری است'
        ];
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ], $messages);
        $category = new category();
        try {
            $category->create($request->all());
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
                case 23000:
                    $msg = 'نام مستعار تکراری است';
                    break;
            }
            return redirect(route('admin.categories.create'))->with('warning', $msg);
        }

        $msg = 'ثبت مقدار جدید با موفقیت انجام شد';
        return redirect(route('admin.categories'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('back.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $messages = [
            'name.required' => 'فیلد عنوان را وارد کنید',
            'slug.unique' => 'نام مستعار تکراری است',
            'slug.required' => 'نام مستعار اجباری است'
        ];
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ], $messages);
        try {
            $category->update($request->all());
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
                case 23000:
                    $msg = 'مقدار تکراری وارد شده است';
                    break;
            }
            return redirect(route('admin.categories.edit'))->with('warning', $msg);
        }

        $msg = 'ثبت مقدار جدید با موفقیت انجام شد';
        return redirect(route('admin.categories'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.categories'))->with('warning', $exception->getCode());
        }
        $msg = 'آیتم مورد نظر حذف گردید';
        return redirect(route('admin.categories'))->with('success', $msg);
    }
}
