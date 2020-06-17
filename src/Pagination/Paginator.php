<?php

namespace Illuminate\Contracts\Pagination;

interface Paginator
{
    /**
     * Get all of the items being paginated.
     *
     * @return array
     */
    public function items();

    /**
     * Get the "index" of the first item being paginated.
     *
     * @return int
     */
    public function firstItem();

    /**
     * Get the "index" of the last item being paginated.
     *
     * @return int
     */
    public function lastItem();

    /**
     * Determine how many items are being shown per page.
     *
     * @return int
     */
    public function perPage();

    /**
     * Determine the current page being paginated.
     *
     * @return int
     */
    public function currentPage();

    /**
     * Determine if there are enough items to split into multiple pages.
     *
     * @return bool
     */
    public function hasPages();

    /**
     * Determine if there is more items in the data store.
     *
     * @return bool
     */
    public function hasMorePages();

    /**
     * Determine if the list of items is empty or not.
     *
     * @return bool
     */
    public function isEmpty();

    /**
     * Determine if the list of items is not empty.
     *
     * @return bool
     */
    public function isNotEmpty();
}
