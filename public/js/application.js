
var s = skrollr.init();

//The options (second parameter) are all optional. The values shown are the default values.
skrollr.menu.init(s, {
    handleLink: function(link) {
        return positions[$(link).attr('href')];
    }
});