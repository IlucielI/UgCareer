<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserPostRequest;
use App\Modules\Services\UserService;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(
        UserService $userService
    ) {
        $this->userService = $userService;
    }

    public function index(UsersDataTable $datatables)
    {
        // //TODO for load from database or else
        // $datas = [
        //     'titlePage' => 'Users Data',
        //     'navLink' => 'users',
        // ];
        // $userLists = $this->userService->execute();
        // //TODO for load from database or else

        // return view(
        //     "backend.pages.users",
        //     compact('userLists','datas')
        // );
        return $datatables->render('backend.pages.user.index');
    }

    public function listTable(Request $request)
    {
        if ($request->ajax()) {
            $userLists = $this->userService->execute();

            return DataTables::of($userLists)
                ->addIndexColumn()
                ->addColumn('no', function ($row) {
                    return $row->name;
                })
                ->addColumn('name', function ($row) {
                    return $row->name;
                })
                ->addColumn('email', function ($row) {
                    return $row->email;
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button data-toggle="modal" data-target="#detailModal" class="detail btn btn-primary btn-sm" data-id="' . $row->id .'">Show</button>
                    <button data-toggle="modal" data-target="#editModal" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Edit</button>
                    <button class="delete btn btn-danger btn-sm" onClick="deleteFunc('  . $row->id . ')">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'condition'])
                ->make(true);
        }
    }

    public function list(Request $request)
    {
        $limit = 3;
        $skip = $request->get('skip', 0);
        $data = $this->forumService->execute($skip, $limit);
        $countTopic = $this->forumService->countTopic();
        $loadMore = 'true';
        $skip += 3;
        if ($countTopic < $limit) {
            $loadMore = 'false';
        }
        if ($skip >= $countTopic) {
            $loadMore = 'false';
        }

        return view("forum-learning::pages.forum.components._item", compact('data', 'loadMore', 'skip'));
    }

    public function show($slug)
    {
        $backUrl = route('forum.index');
        $backTitle = 'Kembali ke Backend';
        $title = 'Backend';
        $pageTitle = 'Backend';

        //TODO for load from database or else
        $topicPopulars = $this->forumService->popularTopic();
        $tagPopulars = $this->forumService->popularTag();
        $data = $this->forumService->showTopic($slug);
        //TODO for load from database or else

        $slug = $slug;

        return view(
            'forum-learning::pages.forum.show',
            compact('backUrl', 'backTitle', 'title', 'pageTitle', 'topicPopulars', 'tagPopulars', 'data', 'slug')
        );
    }

    public function found(Request $request)
    {
        $backUrl = route('forum.index');
        $backTitle = 'Kembali ke Backend';
        $title = 'Backend';
        $pageTitle = 'Backend';

        $search = $request->search;

        //TODO for load from database or else
        $topicPopulars = $this->forumService->popularTopic();
        $tagPopulars = $this->forumService->popularTag();
        //TODO for load from database or else

        return view(
            'forum-learning::pages.forum.search-found',
            compact('backUrl', 'backTitle', 'title', 'pageTitle', 'topicPopulars', 'search', 'tagPopulars')
        );
    }

    public function listSearchFound(Request $request, $slug)
    {
        $limit = 3;
        $skip = $request->get('skip', 0);

        $data = $this->forumService->searchTopic($slug, $skip, $limit);

        $countTopic = $this->forumService->countTopicBySearch($slug);

        $loadMore = 'true';
        $skip += 3;
        if ($countTopic < $limit) {
            $loadMore = 'false';
        }
        if ($skip >= $countTopic) {
            $loadMore = 'false';
        }

        $search = $slug;

        return view("forum-learning::pages.forum.components._item", compact('data', 'loadMore', 'skip', 'search'));
    }

    public function searchByTag($slug)
    {
        $backUrl = route('forum.index');
        $backTitle = 'Kembali ke Backend';
        $title = 'Backend';
        $pageTitle = 'Backend';

        $search = $slug;

        //TODO for load from database or else
        $topicPopulars = $this->forumService->popularTopic();
        $tagPopulars = $this->forumService->popularTag();
        // $mTags = $this->forumService->searchByTag($slug);
        // $forums = $mTags->topics;
        //TODO for load from database or else

        return view(
            'forum-learning::pages.forum.search-found',
            compact('backUrl', 'backTitle', 'title', 'pageTitle', 'topicPopulars', 'search', 'tagPopulars')
        );
    }

    public function listSearchTag(Request $request, $slug)
    {
        $limit = 3;
        $skip = $request->get('skip', 0);

        //get data
        $mTags = $this->forumService->searchByTag($slug);

        //set data with topic
        $data = [];
        $countTopic = 0;

        if ($mTags !== null) {
            $data = $mTags->topics->skip($skip)->take($limit);
            $countTopic = $mTags->topics->count();
        }

        $search = $slug;

        $loadMore = 'true';
        $skip += 3;
        if ($countTopic < $limit) {
            $loadMore = 'false';
        }
        if ($skip >= $countTopic) {
            $loadMore = 'false';
        }

        return view("forum-learning::pages.forum.components._item", compact('data', 'loadMore', 'skip', 'search'));
    }

    // public function store(StoreTopicPost $request)
    // {
    //     $validated = $request->validated();

    //     $topic = [
    //         'title' => $validated['title'],
    //         'content' => $validated['content'],
    //     ];

    //     if ($request->filled('file.attachment')) {
    //         $topic['image_file'] = "forum-files/" . $validated['file']['attachment'];
    //     }

    //     $topicId = $this->forumService->storeTopic($topic);

    //     if (isset($validated['tags'])) {
    //         $mTag = $this->forumService->storeTag($validated['tags']);
    //     }

    //     if (isset($mTag)) {
    //         $this->forumService->storeFlTag($topicId, $mTag);
    //     }

    //     return redirect()->route('forum.index');
    // }

    public function store(UserPostRequest $request)
    {
        $validated = $request->validated();
        $userLists = $this->userService->execute();
        $userId = $this->userService->storeUser($validated);
        Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        return redirect()->route('users.index');
    }

    public function create(){
        return view('backend.pages.addusers');
    }



    public function like(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }

        $favorite = $this->forumService->like($request->topic_id);
        return response()->json($favorite);
    }

    public function dislike(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }

        $favorite = $this->forumService->dislike($request->topic_id);
        return response()->json($favorite);
    }

    public function comment(StoreCommentPost $request)
    {
        $validated = $request->validated();
        $this->forumService->comment($validated);
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }

        $user_id = $this->userService->deleteUser($request->id);
        return response()->json($user_id);

    }
}
