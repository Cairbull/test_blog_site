{if $totalPages > 1}

    <nav class="pagination">
        {if $page > 1}
            <a
                href="?page={$page - 1}"
                class="pagination__link"
            >
                ← Назад
            </a>
        {/if}

        {for $i=1 to $totalPages}
            <a
                href="?page={$i}"
                class="pagination__link{if $i == $page} is-active{/if}"
            >
                {$i}
            </a>
        {/for}

        {if $page < $totalPages}
            <a
                href="?page={$page + 1}"
                class="pagination__link"
            >
                Вперёд →
            </a>
        {/if}

    </nav>

{/if}