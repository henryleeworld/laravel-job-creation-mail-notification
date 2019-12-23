<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                             => 'ID',
            'id_helper'                      => '',
            'name'                           => 'Name',
            'name_helper'                    => '',
            'email'                          => 'Email',
            'email_helper'                   => '',
            'email_verified_at'              => 'Email verified at',
            'email_verified_at_helper'       => '',
            'password'                       => 'Password',
            'password_helper'                => '',
            'roles'                          => 'Roles',
            'roles_helper'                   => '',
            'remember_token'                 => 'Remember Token',
            'remember_token_helper'          => '',
            'created_at'                     => 'Created at',
            'created_at_helper'              => '',
            'updated_at'                     => 'Updated at',
            'updated_at_helper'              => '',
            'deleted_at'                     => 'Deleted at',
            'deleted_at_helper'              => '',
            'skills'                         => 'Skills',
            'skills_helper'                  => '',
            'notifications_frequency'        => 'Notifications Frequency',
            'notifications_frequency_helper' => '',
        ],
    ],
    'skill'          => [
        'title'          => 'Skills',
        'title_singular' => 'Skill',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'job'            => [
        'title'          => 'Jobs',
        'title_singular' => 'Job',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'title'                => 'Title',
            'title_helper'         => '',
            'contact_email'        => 'Contact Email',
            'contact_email_helper' => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
            'skills'               => 'Skills',
            'skills_helper'        => '',
            'description'          => 'Description',
            'description_helper'   => '',
        ],
    ],
];
