<?php
    defined('BASEPATH') OR exit('No direct script access allowed');


    /**
     * call_url()
     *
     * @author		Ravi Vendra Rishika - ravi.vendra.rishika@gmail.com
     *
     * Call the remote URL with PHP native cURL
     * You can improve or modify the function in your own style
     */
    if (!function_exists('call_url'))
    {

        function call_url($url = '', $header = NULL, $body = NULL, $post = TRUE, $additional_params = array())
        {

            $handler 		= curl_init();


		    curl_setopt($handler, CURLOPT_URL, $url);

		    if($header != NULL && $header != '')
		    	curl_setopt($handler, CURLOPT_HTTPHEADER, $header);

	    	if($post == TRUE)
	    	{
			    curl_setopt($handler, CURLOPT_POST, $post);
			    curl_setopt($handler, CURLOPT_POSTFIELDS, http_build_query($body));
	    	}
	    	else
	    		curl_setopt($handler, CURLOPT_HTTPGET, TRUE);

		    curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);

		    curl_setopt($handler, CURLOPT_SSL_VERIFYPEER, FALSE);
		    curl_setopt($handler, CURLOPT_SSL_VERIFYHOST, 2);
		    curl_setopt($handler, CURLOPT_SSL_CIPHER_LIST, 'TLSv1');


		    $output 		= curl_exec($handler);

		    curl_close($handler);


            return ($output);

        }

    }


    /**
     * cleaner_vars()
     *
     * @author		Ravi Vendra Rishika - ravi.vendra.rishika@gmail.com
     *
     * Clean the parameters from HTML, JS and CSS tag scripts
     * Avoid from hijacking & make it safer
     */
    if (!function_exists('cleaner_vars'))
    {

        function cleaner_vars($input = '')
        {

            $search     	= array
                      	(
                            '@<script[^>]*?>.*?</script>@si', # Strip out any Javascript codes
                            '@<[\/\!]*?[^<>]*?>@si', # Strip out any HTML tag codes
                            '@<style[^>]*?>.*?</style>@siU', # Strip out any CSS tag codes
                        	'@<![\s\S]*?--[ \t\n\r]*>@'
                       	);

            $output 		= preg_replace($search, '', $input);
            return ($output);

        }

    }


    /**
     * json_pretty_print()
     *
     * @author		Ravi Vendra Rishika - ravi.vendra.rishika@gmail.com
     *
     * Printing the JSON parameters into a pretty mode
     * Insert your JSON data and get the easy readable format
     */
    if(!function_exists('json_pretty_print'))
    {

    	function json_pretty_print($json = '')
    	{

    		$result 			= '';
    		$level 				= 0;
    		$in_quotes 			= FALSE;
    		$in_escape 			= FALSE;
    		$ends_line_level 	= NULL;
    		$json_length 		= strlen($json);

    		for($i = 0; $i < $json_length; $i++)
    		{

    			$char 			= $json[$i];
    			$new_line_level = NULL;
    			$post 			= "";

    			if ($ends_line_level !== NULL)
    			{
    				$new_line_level 	= $ends_line_level;
    				$ends_line_level 	= NULL;
    			}

    			if ($in_escape)
    				$in_escape 	= FALSE;
    			else
    			if($char === '"')
    				$in_quotes = ! $in_quotes;
    			else
    			if(! $in_quotes)
    			{
    				switch ($char)
    				{
    					case '}' :
    					case ']' :
    						$level --;
    						$ends_line_level = NULL;
    						$new_line_level = $level;
    						break;

    					case '{' :
    					case '[' :
    						$level ++;
    					case ',' :
    						$ends_line_level = $level;
    						break;

    					case ':' :
    						$post = " ";
    						break;

    					case " " :
    					case "\t" :
    					case "\n" :
    					case "\r" :
    						$char = "";
    						$ends_line_level = $new_line_level;
    						$new_line_level = NULL;
    						break;
    				}
    			}
    			else
    			if ($char === '\\')
    				$in_escape 	= TRUE;

    			if ($new_line_level !== NULL)
    				$result 	.= "\n" . str_repeat ( "\t", $new_line_level );


    			$result .= $char . $post;

    		}

    		return $result;

    	}

    }


    /**
     * sanitizer_vars()
     *
     * @author		Ravi Vendra Rishika - ravi.vendra.rishika@gmail.com
     *
     * Sanitize each parameters executed in this application
     * Avoid from hijacking & make it safer
     */
    if (!function_exists('sanitizer_vars'))
    {

        function sanitizer_vars($input = '')
        {

            if (is_array($input))
            {
                foreach ($input as $var => $val)
                    $output[$var]   = @ sanitizer_vars($val);
            }
            else
            {
                if (get_magic_quotes_gpc())
                    $output	= @ stripslashes($input);
                else
                    $output = $input;


                $output     = trim($output);
                $output     = @ cleaner_vars($output);
            }

            return ($output);

        }

    }