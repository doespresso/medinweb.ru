{* rus_build_unisender dbazhenov *}

{if $search.user_type == "C"}
    <li>{btn type="list" text=__("add_selected_to_unisender") dispatch="dispatch[unisender.add_selected]" form="userlist_form"}</li>
{/if}
