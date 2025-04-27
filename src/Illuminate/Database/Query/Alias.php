<?php

namespace Illuminate\Database\Query;

class Alias
{
    /**
     * The alias for the table.
     *
     * @var string
     */
    public $table;

    /**
     * The aliases for the subquery columns.
     *
     * @var array|null
     */
    public $columns;

    /**
     * Create a new index hint instance.
     *
     * @param string $table
     * @param array $columns
     */
    public function __construct($table, $columns = null)
    {
        $this->table = $table;
        $this->columns = $columns;
    }
}
