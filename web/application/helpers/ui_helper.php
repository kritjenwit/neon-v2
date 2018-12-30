<?php
/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 29-Oct-18
 * Time: 17:17
 */


if(!function_exists('html_select'))
{
    /**
     * Generate <select></select> with <option></option>
     *
     * @param array $array_option
     * @param array $array_attribute
     * @param bool $enable_label
     * @param string $additional_class
     * @return string $template
     */

    function html_select($array_option,$array_attribute=NULL,$enable_label=FALSE,$additional_class=NULL)
    {
        $option = '';
        $label = '';
        $attr = '';
        $class = 'form-control '. $additional_class;
        foreach ($array_option as $key => $value)
        {
            if($enable_label !== FALSE)
            {
                $label = '<label for="'.$key.'">'.$key.'</label>';
            }
            foreach ($value as $k => $v)
            {
                $option .= '<option value="'.$k.'">'.$v.'</option>';
            }
        }

        if($array_attribute !== NULL)
        {
            foreach ($array_attribute as $k => $v)
            {
                $attr .= $k.'='.$v.' ';
            }
        }
        $select = '<select  class='.$class.' '.$attr.'>'.$option.'</select>';
        $template = '<div class="form-group">'.$label.$select.'</div>';
        return $template;
    }
}


if(!function_exists('btn_submit'))
{
    /**
     * Generate Button submit
     *
     *
     * @param string $value
     * @param string $additional_class
     * @param array $attribute
     *
     * @return string $template
     */

    function btn_submit($value,$additional_class=NULL,$attribute=NULL)
    {
        $class = 'btn '. $additional_class;
        if($attribute !== NULL && is_array($attribute))
        {
            foreach ($attribute as $k => $v)
            {
                $attr = $k . '='. $v . ' ';
            }
            $template = '<input type="submit" value="'.$value.'" class="'.$class.' '.$attr.'">';

        }
        else
        {
            $template = '<input type="submit" value="'.$value.'" class="'.$class.'">';
        }
        return $template;
    }
}


if(!function_exists('btn_a_href'))
{
    /**
     * @param string $value
     * @param boolean $base_url
     * @param string $path
     * @param string $additional_class
     *
     * @return string $template
     */
    function btn_a_href($value, $base_url=TRUE,$path,$additional_class=NULL)
    {
        $class = 'btn '.$additional_class;
        if($base_url === TRUE)
        {
            $url = base_url().$path;
        }
        else
        {
            $url = $path;
        }
        $template = '<a href="'.$url.'" class="'.$class.'">'.$value.'</a>';
        return $template;
    }
}

if(!function_exists('gen_ui'))
{
    /**
     * Generate UI from database
     *
     *
     * @param array $blocks
     * @param boolean $enable_label
     * @return string $template
     */

    function gen_ui($blocks,$enable_label=FALSE)
    {
        $template = '';
        $input = '';
        $label = '';
        foreach ($blocks as $key => $block)
        {
            $attr = '';
            foreach ($block as $k => $v) {
                $attr .= $k . '="' . $v . '" ';
            }
            if($enable_label !== FALSE)
            {
                $label = '<label for="'.$block['id'].'" >'.ucfirst($key).'</label>';
            }
            $input .= '<div class="form-group">'.$label.'<input '.$attr.'></div>';
        }
        $template .= $input;

        return $template;
    }
}

if(!function_exists('success_flashdata'))
{

    /**
     * Generate Alert box if there is flashdata
     *
     *
     * @param string $type          success or error
     * @param string $message       Any message
     * @return string $template
     */
    function flashdata($type,$message)
    {
        $template = '';
        if($type === 'error')
        {
            $template = '<div class="alert alert-danger text-center"><div class="container">'.$message.'</div></div>';
        }
        elseif ($type === 'success')
        {
            $template = '<div class="alert alert-success text-center"><div class="container">'.$message.'</div></div>';
        }
        return $template;
    }
}

if(!function_exists('btn_sm_icon'))
{
    /**
     * Generate button with icon from Font awesome
     *
     *
     * @param string $icon
     * @param string $link
     * @return string $template
     *
     */

    function btn_sm_icon($icon,$link=NULL)
    {
        $url = $link !== NULL ? $link : '#';
        $template = '<a href="'.$url.'"><i class="'.$icon.'"></i></a>';
        return $template;
    }
}



