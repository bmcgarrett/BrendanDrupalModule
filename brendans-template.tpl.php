<div id="<?php $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div id='weatherBlockTop'>
        <div id="cityState"><span id="cityStateSpan"><?php print $content["cityName"]; ?> , <?php print $content["stateName"]; ?></span></div>
    </div>
    <div id="weatherBlockMiddle">
        <div id='weatherBlockLeft'>
            <span id='currentWeatherText'>Current</span>
            <img src='http://img.weather.weatherbug.com/forecast/icons/localized/50x42/en/trans/<?php print $content["currentCondCode"]; ?>.png'/>
            </br>
            <span id='currentWeatherTempText'><?php print $content["currentTemp"]; ?></span>
        </div>
        <div id='weatherBlockRight'>
            <span id='todayHighText'>Today High</span>
            <span id='todayHighTempText'><?php print $content["todayHigh"]; ?></span>
            <span id='todayHighText'>Today Low</span>
            <span id='todayHighTempText'><?php print $content["todayLow"]; ?></span>
        </div>
    </div>
</div>