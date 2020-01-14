<?php

function get_db()
{
    $mongo = new MongoClient(
        "mongodb://localhost:27017/",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
            'db' => 'wai',
        ]);

    $db = $mongo->wai;

    return $db;
}

function get_user($query)
{
    $db = get_db();
    return $db->users->findOne($query);
}
function save_user($user)	
{
    $db = get_db();

    $db->users->insert($user);
    return true;
}

function get_photos()
{
    $db = get_db();
	$photos = $db->photos->find();
    return $photos;
}

function save_photo($zdjecie, $id)	
{
    $db = get_db();
	if ($id == null) {
        $db->photos->insert($zdjecie);
    } else {
		
    $db->photos->update(['_id' => new MongoId($id)], $zdjecie);
	}
    return true;
}

function get_photo($id)
{
    $db = get_db();
    return $db->photos->findOne(['_id' => new MongoId($id)]);
}




