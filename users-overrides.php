<?php


function qa_content_prepare($voting = false, $categoryids = null)
{
    $qa_content = qa_content_prepare_base($voting, $categoryids);


    $confirmed = qa_get_logged_in_level() & QA_USER_LEVEL_APPROVED;

    if (!$confirmed) {
        unset($qa_content['navigation']['main']['user']);
    }

    return $qa_content;
}


function qa_page_routing() {

  $l_routing = qa_page_routing_base();

  $confirmed = qa_get_logged_in_level() & QA_USER_LEVEL_APPROVED;

//print_r ($l_routing);

  if (!$confirmed) {
    $l_routing['users'] = '../qa-plugin/q2a-hide-users-list/no-permission.php';
    $l_routing['user/'] = '../qa-plugin/q2a-hide-users-list/no-permission.php';
  }

   return $l_routing;

}