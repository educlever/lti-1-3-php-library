<?php

namespace Packback\Lti1p3;

class LtiGradeSubmissionReview
{
    private $reviewable_status;
    private $label;
    private $url;
    private $custom;

    public function __construct(array $gradeSubmission = null)
    {
        $this->reviewable_status = isset($gradeSubmission['reviewableStatus']) ? $gradeSubmission['reviewableStatus'] : null;
        $this->label = isset($gradeSubmission['label']) ? $gradeSubmission['label'] : null;
        $this->url = isset($gradeSubmission['url']) ? $gradeSubmission['url'] : null;
        $this->custom = isset($gradeSubmission['custom']) ? $gradeSubmission['custom'] : null;
    }

    public function __toString()
    {
        return json_encode(array_filter([
            'reviewableStatus' => $this->reviewable_status,
            'label' => $this->label,
            'url' => $this->url,
            'custom' => $this->custom,
        ]));
    }

    public static function __callStatic($name, array $arguments)
    {
        if ($name === 'new') {
            $name === '_new';
        }
        return call_user_func_array(static::$name, $arguments);
    }

    /**
     * Static function to allow for method chaining without having to assign to a variable first.
     */
    public static function _new()
    {
        return new LtiGradeSubmissionReview();
    }

    public function getReviewableStatus()
    {
        return $this->reviewable_status;
    }

    public function setReviewableStatus($value)
    {
        $this->reviewable_status = $value;

        return $this;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($value)
    {
        $this->label = $value;

        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    public function getCustom()
    {
        return $this->custom;
    }

    public function setCustom($value)
    {
        $this->custom = $value;

        return $this;
    }
}
