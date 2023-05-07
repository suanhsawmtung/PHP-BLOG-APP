<?php

function pusher_comment($resultComment){

  $options = array(
    'cluster' => 'ap1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '2360b8f55f7fdbc1d58b',
    '4e7877b3436bb3df8b1a',
    '1588719',
    $options
  );

  $data['resultComment'] = $resultComment;
  $pusher->trigger('comment-channel', 'comment-event', $data);
}

function pusher_role($id, $newRole){
  $options = array(
    'cluster' => 'ap1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '2360b8f55f7fdbc1d58b',
    '4e7877b3436bb3df8b1a',
    '1588719',
    $options
  );

  $data['id'] = $id;
  $data['newRole'] = $newRole;
  $pusher->trigger('role-channel', 'role-event', $data);
} 