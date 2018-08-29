<?php

function task_calendar_theme(){
    $path_to_theme = drupal_get_path('theme', variable_get('theme_default', 'bartik'));
    $themes = array();
    $themes['task_list'] = array(
                        'template' => 'task-list',
                        'path' => $path_to_theme.'/templates/task_calendar'
                    );
    return $themes;
}
