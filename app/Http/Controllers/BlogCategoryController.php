<?php

namespace App\Http\Controllers;

use App\DataTables\BlogCategoryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBlogCategoryRequest;
use App\Http\Requests\UpdateBlogCategoryRequest;
use App\Models\BlogCategory;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BlogCategoryController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:blogCategories.index')->only(['index', 'show']);
        $this->middleware('can:blogCategories.create')->only(['create', 'store']);
        $this->middleware('can:blogCategories.edit')->only(['edit', 'update']);
        $this->middleware('can:blogCategories.destroy')->only('destroy');
    }
    /**
     * Display a listing of the BlogCategory.
     *
     * @param BlogCategoryDataTable $blogCategoryDataTable
     * @return Response
     */
    public function index(BlogCategoryDataTable $blogCategoryDataTable)
    {
        return $blogCategoryDataTable->render('admin.blog_categories.index');
    }

    /**
     * Show the form for creating a new BlogCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.blog_categories.create');
    }

    /**
     * Store a newly created BlogCategory in storage.
     *
     * @param CreateBlogCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogCategoryRequest $request)
    {
        $input = $request->all();

        /** @var BlogCategory $blogCategory */
        $blogCategory = BlogCategory::create($input);

        Flash::success('Blog Category saved successfully.');

        return redirect(route('blogCategories.index'));
    }

    /**
     * Display the specified BlogCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var BlogCategory $blogCategory */
        $blogCategory = BlogCategory::find($id);

        if (empty($blogCategory)) {
            Flash::error('Blog Category not found');

            return redirect(route('blogCategories.index'));
        }

        return view('admin.blog_categories.show')->with('blogCategory', $blogCategory);
    }

    /**
     * Show the form for editing the specified BlogCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var BlogCategory $blogCategory */
        $blogCategory = BlogCategory::find($id);

        if (empty($blogCategory)) {
            Flash::error('Blog Category not found');

            return redirect(route('blogCategories.index'));
        }

        return view('admin.blog_categories.edit')->with('blogCategory', $blogCategory);
    }

    /**
     * Update the specified BlogCategory in storage.
     *
     * @param  int              $id
     * @param UpdateBlogCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogCategoryRequest $request)
    {
        /** @var BlogCategory $blogCategory */
        $blogCategory = BlogCategory::find($id);

        if (empty($blogCategory)) {
            Flash::error('Blog Category not found');

            return redirect(route('blogCategories.index'));
        }

        $blogCategory->fill($request->all());
        $blogCategory->save();

        Flash::success('Blog Category updated successfully.');

        return redirect(route('blogCategories.index'));
    }

    /**
     * Remove the specified BlogCategory from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var BlogCategory $blogCategory */
        $blogCategory = BlogCategory::find($id);

        if (empty($blogCategory)) {
            Flash::error('Blog Category not found');

            return redirect(route('blogCategories.index'));
        }

        $blogCategory->delete();

        Flash::success('Blog Category deleted successfully.');

        return redirect(route('blogCategories.index'));
    }
}
