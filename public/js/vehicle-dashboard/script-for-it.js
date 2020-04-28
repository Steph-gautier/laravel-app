        function createDashboard() {
            $("#rpm").kendoRadialGauge({
                theme: "black",

                pointer: {
                    value: 0,
                    color: "#ea7001"
                },

                scale: {
                    startAngle: -45,
                    endAngle: 120,

                    min: 0,
                    max: 6,

                    majorUnit: 1,
                    majorTicks: {
                        width: 1,
                        size: 7
                    },

                    minorUnit: 0.2,
                    minorTicks: {
                        size: 5
                    },

                    ranges: [{
                        from: 4,
                        to: 5,
                        color: "#ff7a00"
                    }, {
                        from: 5,
                        to: 6,
                        color: "#c20000"
                    }],

                    labels: {
                        font: "11px Arial,Helvetica,sans-serif"
                    }
                }
            });

            $("#kmh").kendoRadialGauge({
                theme: "black",

                pointer: {
                    value: 0,
                    color: "#ea7001"
                },

                scale: {
                    startAngle: -60,
                    endAngle: 240,

                    min: 0,
                    max: 220,

                    majorTicks: {
                        width: 1,
                        size: 14
                    },
                    majorUnit: 20,

                    minorTicks: {
                        size: 10
                    },

                    minorUnit: 2
                }
            });

            $("#fuel").kendoRadialGauge({
                theme: "black",

                pointer: {
                    value: 0.3,
                    color: "#ea7001"
                },

                scale: {
                    startAngle: 90,
                    endAngle: 180,

                    min: 0,
                    max: 1,

                    majorUnit: 0.5,
                    majorTicks: {
                        width: 2,
                        size: 6
                    },

                    minorUnit: 0.25,
                    minorTicks: {
                        size: 3
                    },

                    ranges: [{
                        from: 0,
                        to: 0.1,
                        color: "#c20000"
                    }],

                    labels: {
                        font: "9px Arial,Helvetica,sans-serif"
                    }
                }
            });

            $("#water-temprature").kendoRadialGauge({
                theme: "black",

                pointer: {
                    value: 90,
                    color: "#ea7001"
                },

                scale: {
                    startAngle: 180,
                    endAngle: 270,

                    min: 60,
                    max: 120,

                    majorUnit: 30,
                    majorTicks: {
                        width: 2,
                        size: 6
                    },

                    minorUnit: 10,
                    minorTicks: {
                        size: 3
                    },

                    ranges: [{
                        from: 110,
                        to: 120,
                        color: "#c20000"
                    }],

                    labels: {
                        font: "9px Arial,Helvetica,sans-serif"
                    }
                }
            });
        }

        var animateInterval;
        function animateDashboard() {
            if (animateInterval) {
                return;
            }

            var GEARS = [0.14, 0.06, 0.035, 0.027, 0.019],
                IDLE_RPM = 0.9,
                CHANGE_RPM = 4,
                CHANGE_DELAY = 400,
                DECAY_RATE = 0.0017,
                TOP_SPEED = 210,
                ACCELERATION = 0.6,
                INTERVAL = 50;

            var speed = 0,
                skip = 0,
                ratio,
                gear = 0;

            function update() {
                $("#rpm").data("kendoRadialGauge").value(GEARS[gear] * speed + IDLE_RPM);
                $("#kmh").data("kendoRadialGauge").value(speed);
            }

            animateInterval = setInterval(function() {
                if(speed < TOP_SPEED) {
                    if (GEARS[gear] * speed > CHANGE_RPM && gear < GEARS.length) {
                        gear++;
                        skip = CHANGE_DELAY / INTERVAL;
                        update();
                    }

                    if (skip-- < 0) {
                        speed += ACCELERATION - (DECAY_RATE * speed);
                        update();
                    }
                } else {
                    skip = 100;
                    speed = 0;
                    gear = 0;
                }
            }, INTERVAL);
        }

        $(document).ready(function() {
            animateInterval = null;

            createDashboard();
            animateDashboard();

            $(document).bind("kendo:skinChange", function(e) {
                createDashboard();
            });

            $(document).bind("kendo:pageUnload", function(e) {
                clearInterval(animateInterval);

            });
        });
        function changeStylesheetRule(s, selector, property, value){
    // Make these strings lowercase
    selector = selector.toLowerCase();
    value    = value.toLowerCase();

    // Delete it if it exists
    for(var i = 0; i < s.cssRules.length; i++){
        var rule = s.cssRules[i];
        if(rule.selectorText === selector){
            s.deleteRule(i);
            break;
        }
    }

    // Convert camelCase to hyphenated-case
    property = property.replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();
    s.insertRule(selector + " { " + property + ": " + value + "; }", 0);
}

// Function to select random array element
// Used within the setInterval()
function randomValue(arr){
    return arr[Math.floor(Math.random() * arr.length)];
}

jQuery.easing['jswing'] = jQuery.easing['swing'];
jQuery.extend(jQuery.easing, {
    def: 'easeOutQuad',
    swing: function (x, t, b, c, d){
        return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
    },
    easeOutQuad: function (x, t, b, c, d){
        return -c * (t /= d) * (t - 2) + b;
    },
});

$(document).ready(function(){
    var perc = 50;
    var s = document.styleSheets[0];
    // Define a size array, this will be used to vary bubble sizes
    var sArray = [];

    setTimeout(function(){
        updateBattery(perc, s);
        $('.percentage').text(perc);
        $('.units').text('%');
        $('.battery-text').css('opacity', 1);
        

        setTimeout(function(){
            $('.liquid').show();
        }, 500);
    }, 500);

    function updateBattery(perc, s){
        if(perc === 100){
            sArray = [];
        } else if(sArray.length === 0){
            sArray = [4, 6, 8, 10];
        }

        changeStylesheetRule(s, '.battery', 'backgroundPosition', '0 -' + (100 - perc) + '% !important');
        changeStylesheetRule(s, '.battery-text', 'backgroundPosition', '0 -' + (100 - perc) + '%');
        changeStylesheetRule(s, '.liquid', 'top', (100 - perc) + '%');
        if(perc === 100){
            changeStylesheetRule(s, '.liquid-bg-color', 'backgroundColor', '#00fa57');
        } else {
            changeStylesheetRule(s, '.liquid-bg-color', 'backgroundColor', '#444');
        }
    }

    // setInterval function used to create new bubble every 350 milliseconds
    setInterval(function(){
        if(sArray.length > 0){
            // Get a random size, defined as variable so it can be used for both width and height
            var size = randomValue(sArray);

            var largestSize = Math.max.apply(Math, sArray);
            var offset = largestSize / 2; // half to get the largest bubble radius
            offset += 5; // 5px for border-right

            // New bubble appended to div with it's size and left position being set inline
            $('.bubbles').each(function(){
                var bArray = new Array(parseInt($(this).width()) - offset)
                                 .join()
                                 .split(',')
                                 .map(function(item, index){ return ++index; });

                $(this).append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height: ' + size + 'px"></div>');
            });

            // Animate each bubble to the top (bottom 100%) and reduce opacity as it moves
            // Callback function used to remove finished animations from the page
            $('.individual-bubble').animate({
                'top': 0,
                'bottom': '100%',
                'opacity' : '-=0.7',
            }, 3000, function(){
                $(this).remove();
            });
        }
    }, 350);

});