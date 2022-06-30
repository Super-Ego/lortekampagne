"use strict";
!(function (n) {
  function e(e) {
    var a = e.find(".marker"),
      t = {
        zoom: e.data("zoom") || 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [],
      },
      o = new google.maps.Map(e[0], t);
    return (
      (o.markers = []),
      a.each(function () {
        !(function (n, e) {
          var a = n.data("lat"),
            t = n.data("lng"),
            o = { lat: parseFloat(a), lng: parseFloat(t) },
            r = new google.maps.Marker({ position: o, map: e });
          if ((e.markers.push(r), n.html())) {
            var s = new google.maps.InfoWindow({ content: n.html() });
            google.maps.event.addListener(r, "click", function () {
              s.open(e, r);
            });
          }
        })(n(this), o);
      }),
      (function (n) {
        var e = new google.maps.LatLngBounds();
        n.markers.forEach(function (n) {
          e.extend({ lat: n.position.lat(), lng: n.position.lng() });
        }),
          1 == n.markers.length ? n.setCenter(e.getCenter()) : n.fitBounds(e);
      })(o),
      o
    );
  }
  n(document).ready(function () {
    n(".acf-map").each(function () {
      e(n(this));
    });
  });
})(jQuery);
