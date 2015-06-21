<?php namespace App\Library;

class Request extends \Illuminate\Http\Request
{
    /**
     * Get a subset of the items from the input data.
     *
     * @param  array  $keys
     * @return array
     */
    public function only($keys)
    {
        $keys = is_array($keys) ? $keys : func_get_args();

        $results = [];

        $input = $this->all();

        foreach ($keys as $key)
        {
            if (is_array($key)) {
                foreach ($key as $k => $v) {
                    array_set($results, $k, array_get($input, $k, $v));
                }

            } else {
                array_set($results, $key, array_get($input, $key));
            }
        }

        return $results;
    }
}