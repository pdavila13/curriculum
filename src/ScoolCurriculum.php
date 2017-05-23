<?php

namespace Scool\Curriculum;

class ScoolCurriculum
{
    public static function factories()
    {
        return [
            SCOOL_CURRICULUM_PATH . '/database/factories/StudyFactory.php' =>
                database_path('/factories/StudyFactory.php'),
            SCOOL_CURRICULUM_PATH . '/database/factories/LawFactory.php' =>
                database_path('/factories/LawFactory.php'),
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
