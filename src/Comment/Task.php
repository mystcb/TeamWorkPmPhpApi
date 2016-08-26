<?php namespace TeamWorkPm\Comment;

class Task extends Model
{
    protected $resource = 'todo_items';

    protected function init()
    {
        $this->action = 'comments';
    }

    /**
     * Retrieve Single comment
     * GET /comments/#{id}.xml
     *
     * Retrieves the comment corresponding to the submitted integer ID.
     */
    public function get($id, $params  = NULL)
    {
        $id = (int) $id;
        if ($id <= 0) {
            throw new Exception('Invalid param id');
        }
        return $this->rest->get("$this->action/$id");
    }
}
