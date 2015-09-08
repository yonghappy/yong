  var cko = {
    setCookie: function(c_name, value, expireminute) {
      var exdate = new Date();
      var cookieVal="";
      exdate.setTime(exdate.getTime() + expireminute * 60 * 1000);
      cookieVal = c_name + "=" + escape(value) + ((expireminute == null) ? "" : ";expires=" + exdate.toGMTString());
      cookieVal=cookieVal+ ";path=/;";
      cookieVal=cookieVal + "domain=wdb.es;";
      document.cookie = cookieVal;
      window.console && console.log(cookieVal)
    },
    getCookie: function(c_name) {
      if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=")
        if (c_start != -1) {
          c_start = c_start + c_name.length + 1
          c_end = document.cookie.indexOf(";", c_start)
          if (c_end == -1) c_end = document.cookie.length
          return unescape(document.cookie.substring(c_start, c_end))
        }
      }
      return "";
    }
  }
  window.onload = function() {
    var url = 'http://www.rolecosplay.com; //弹窗的地址
    var ctime = 60; //多长时间弹一次，60表示60分
    if (document.getElementsByTagName('html').length > 0) {
      document.getElementsByTagName('html')[0].onclick = function() {
        if (!cko.getCookie('_clickad')) {
          cko.setCookie('_clickad', 'goto', ctime);
          window.open(url);
        }
      }
    }
  }