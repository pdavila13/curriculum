<?php

namespace Scool\Curriculum;

class ScoolCurriculum
{
    public static function factories()
    {
        return [
            SCOOL_CURRICULUM_PATH . '/database/factories/StudyFactory.php' =>
                database_path('/factories/StudyFactory.php'),
        ];
    }

    public static function configs()
    {
        return [
            SCOOL_CURRICULUM_PATH . '/config/curriculum.php' =>
                config_path('curriculum.php'),
        ];
    }
}
