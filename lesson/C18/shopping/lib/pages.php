<?php

function get_page_by_id($id)
{
    global $list_page;
    //    kiêm trra ton tai hay khong ?
    if (array_key_exists($id, $list_page)) {
        return $list_page[$id];
    }else{
        return [
            'title' => 'Trang không tồn tại',
            'content' => 'Xin lỗi, trang bạn đang tìm kiếm không tồn tại.'
        ];
    }

}