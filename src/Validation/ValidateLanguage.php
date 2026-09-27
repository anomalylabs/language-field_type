<?php namespace Anomaly\LanguageFieldType\Validation;

use Anomaly\LanguageFieldType\LanguageFieldType;

/**
 * Class ValidateLanguage
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class ValidateLanguage
{

    /**
     * Handle the validation.
     *
     * @param LanguageFieldType $fieldType
     * @param                   $value
     * @return bool
     */
    public function handle(LanguageFieldType $fieldType, $value)
    {
        if ($value === null || $value === '') {
            return true;
        }

        if (!is_string($value)) {
            return false;
        }

        return in_array($value, array_keys(config('streams::locales.supported')), true);
    }
}
