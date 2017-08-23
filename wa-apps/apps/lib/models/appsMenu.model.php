<?php

class appsMenuModel extends waNestedSetModel
{
    protected $table = 'apps_menu';

    protected $left = 'left_key';
    protected $right = 'right_key';
    protected $parent = 'parent_id';

    public function getTree($id, $depth = null, $where = array())
    {
        $tree = parent::getTree($id, $depth = null, $where = array());
        if ($tree) {
            $stack = array();
            $result = array();
            foreach ($tree as $c) {
                $c['childs'] = array();

                // Number of stack items
                $l = count($stack);

                // Check if we're dealing with different levels
                while ($l > 0 && $stack[$l - 1]['depth'] >= $c['depth']) {
                    array_pop($stack);
                    $l--;
                }

                // Stack is empty (we are inspecting the root)
                if ($l == 0) {
                    // Assigning the root node
                    $i = count($result);
                    $result[$i] = $c;
                    $stack[] = &$result[$i];
                } else {
                    // Add node to parent
                    $i = count($stack[$l - 1]['childs']);
                    $stack[$l - 1]['childs'][$i] = $c;
                    $stack[] = &$stack[$l - 1]['childs'][$i];
                }
            }
            return $result;
        } else {
            return $tree;
        }
    }
}