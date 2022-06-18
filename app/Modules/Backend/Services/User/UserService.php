<?php

namespace App\Modules\Services;

use App\Modules\Repositories\EloquentUserRepository;
use Illuminate\Support\Facades\Auth;
use App\Modules\Services\ApplicationServiceInterface;

final class UserService implements ApplicationServiceInterface
{

    protected EloquentUserRepository $repository;


    public function __construct(
        EloquentUserRepository $repository

    ) {
        $this->repository = $repository;

    }

    /**
     * @param mixed $dto
     * @return array
     */
    public function execute($dto = null)
    {
        $users = $this->repository->getAllForPublic();

        return $users;
    }
//
//    public function countTopic()
//    {
//        $countTopic = $this->repository->getCountTopic();
//
//        return $countTopic;
//    }
//
//    public function popularTopic()
//    {
//        $popular = $this->repository->getPopularForPublic();
//
//        return $popular;
//    }
//
//    public function searchTopic($search, $skip = 0, $limit = 3)
//    {
//        $search = $this->repository->getByPublicByTitle($search, $skip, $limit);
//
//        return $search;
//    }
//
//    public function countTopicBySearch($search)
//    {
//        $countTopic = $this->repository->getCountTopicBySearch($search);
//
//        return $countTopic;
//    }
//
//    public function showTopic($dto = null)
//    {
//        $forum = $this->repository->getByPublic($dto);
//
//        return $forum;
//    }
//
    public function storeUser($data)
    {
        $response = $this->repository->create($data);
        return $response;
    }
//
//    public function storeFlTag($topicId, $mTag)
//    {
//        $response = [];
//        foreach ($mTag as $value) {
//            $response = $this->tag->create([
//                'topic_id' => $topicId,
//                'tag_id' => $value
//            ]);
//        }
//
//        return $response;
//    }
//
//    public function like($topicId)
//    {
//        $this->favorite->create([
//            'topic_id' => $topicId,
//        ]);
//
//        $response = $this->favorite->getAllForPublic($topicId);
//
//        return $response->count();
//    }
//
    public function deleteUser($id)
    {
        return $this->repository->delete([
            'id' => $id
        ]);
    }
//
//    public function searchByTag($dto = null)
//    {
//        $search = $this->masterTag->getByPublicByTitle($dto);
//
//        return $search;
//    }
//
//    public function comment($data)
//    {
//        $response = $this->comment->create($data);
//
//        return $response;
//    }
//
//    public function popularTag($dto = null)
//    {
//        $tag = $this->masterTag->getAllForPublic($dto);
//
//        return $tag;
//    }
//
//    public function storeTag($data)
//    {
//        $response = [];
//        foreach ($data as $value) {
//            if ($value) {
//                $response[] = $this->masterTag->create([
//                    'title' => $value
//                ]);
//            }
//        }
//        return $response;
//    }
}
