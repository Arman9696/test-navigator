<section class="section mb-medium">
    <div class="container">
        <div class="tabs-navigation-wrapper">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "about",
                [
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "COMPONENT_TEMPLATE" => "about",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => [],
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "left",
                    "USE_EXT" => "Y"
                ]
            );?>
        </div>
    </div>
</section>