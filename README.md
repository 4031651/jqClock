jQuery analog clock plugin
===================

jQuery analog clock widget plug-in.

###Usage
<pre><code>
jQuery('#clock').clock({
    size:        150,       // Size of widget. It means that width and height will be {size} px. Default is 150.
    graduations: 4,         // The number of graduations on the clock face. It may be 4, 12 or 0.
                            // If 0 is given graduations will not shown. Default is 4.

    date:        new Date() // JavaScript Date object. By default is current date.
});
</code></pre>

###Styling
jqClock provides following CSS classes to style the clock widget:
    
-    .jqc-clock-sec span - for styling seconds hand of a clock
-    .jqc-clock-min span - for styling minute hand of a clock
-    .jqc-clock-hour span - for styling hour hand of a clock
-    .jqc-drad span - for styling graduations of a clock dial

###Browsers compatibility
The plugin is written using CSS3 transform rotate() and works in the following browsers:

-    IE 9.0 +
-    Firefox 3.6 +
-    Chrome 17.0 +
-    Android Browser 2.1 +
-    Safari 5.0 +
-    iOS Safari 3.2 +
-    Opera 11.6 +
-    Opera Mobile 11.0 +

#### [Demo1](http://4031651.github.com/jqClock/) [Demo2](http://w3maker.name/subs/jqclock/index.php)