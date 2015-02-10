<div class="tp-banner-container">
    <div id="rsBanner" class="tp-banner">
        <ul>
            <% loop $Images %>
            <!-- SLIDE -->
            <li class="revolution-mch-1" data-transition="<% if $Transition %>{$Transition}<% else %>fade<% end_if %>" data-slotamount="5" data-masterspeed="1000">
                <!-- MAIN IMAGE -->
                <img src="$Image.URL" alt="darkblurbg" data-bgfit="cover" data-bgposition="center center"
                     data-bgrepeat="no-repeat">
                <% if $Name %>
                <div class="tp-caption revolution-ch1 sft start"
                     data-x="center"
                     data-hoffset="0"
                     data-y="80"
                     data-speed="1500"
                     data-start="500"
                     data-easing="Back.easeInOut"
                     data-endeasing="Power1.easeIn"
                     data-endspeed="300">
                    $Name
                </div>
                <% end_if %>

                <% if $Caption %>
                <!-- LAYER -->
                <div class="tp-caption revolution-ch2 sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="150"
                     data-speed="1400"
                     data-start="2000"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6">
                    $Caption
                </div>
                <% end_if %>

                <% if $Link %>
                <!-- LAYER -->
                <div class="tp-caption sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="310"
                     data-speed="1600"
                     data-start="2800"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6">
                    <a href="{$Link}" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
                </div>
                <% end_if %>
            </li>
            <!-- END SLIDE -->
            <% end_loop %>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>