<div id="<?php $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div id='weatherBlockTop'>
        <div id="cityState"><span id="cityStateSpan"><?php print $content["cityName"]; ?> , <?php print $content["stateName"]; ?></span></div>
    </div>
    <div id="weatherBlockMiddle">
        <div id='weatherBlockLeft'>
            <span id='currentWeatherText'>Current</span>
            </br>
            <img src='http://img.weather.weatherbug.com/forecast/icons/localized/50x42/en/trans/<?php print $content["currentCondCode"]; ?>.png'/>
            </br>
            <span id='currentWeatherTempText'><?php print round($content["currentTemp"]); ?>&deg;F</span>
            </br>
            <span id='currentWeatherDescText'><?php print $content["currentWeatherDesc"]; ?></span>
        </div>
        <div id='weatherBlockRight'>
            <div id="todayForecast">
                <span id='todayText'>Today</span>
                </br>
                <img src='http://img.weather.weatherbug.com/forecast/icons/localized/25x21/en/trans/<?php print $content["todayIcon"]; ?>.png'/>
                <span id='todayHighAndLow' class='forecastText'><?php print $content["todayHigh"]; ?>...<?php print $content["todayLow"]; ?></span>
                <br>
                <span id='todayWeatherDescText' class='forecastText'><?php print $content["todayDesc"]; ?></span>
            </div>
            <div id="tomorrowForecast">
                <span id='tomorrowText'>Tomorrow</span>
                </br>
                <img src='http://img.weather.weatherbug.com/forecast/icons/localized/25x21/en/trans/<?php print $content["tomorrowIcon"]; ?>.png'/>
                <span id='tomorrowHighAndLow' class='forecastText'><?php print $content["tomorrowHigh"]; ?>...<?php print $content["tomorrowLow"]; ?></span>
                </br>
                <span id='tomorrowWeatherDescText' class='forecastText'><?php print $content["tomorrowDesc"]; ?></span>
            </div>
        </div>
    </div>
</div>