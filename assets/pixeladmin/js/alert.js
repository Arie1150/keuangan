
function AlertMsg(err_title, err_msg, err_class) {

  var alert_icon = {
    info: "fa fa-info-circle", // icon info
    success: "fa fa-check-square-o", // icon success
    warning: "fa fa-warning", // icon warning
    danger: "fa fa-close" // icon danger
  };

  var alert_container   = $('.px-content'); // place to show alert
  var alert_content     = '<i class="' + alert_icon[err_class] + '"></i> <strong>' + err_title + '!</strong> <br/>' + err_msg; // content alert
  var alert_type        = err_class; // class alert (info, success, warning, danger)
  var alert_style       = 'dark'; // style alert (dark or '')
  var alert_timer       = '10'; // timer dismiss alert
  var alert_namespace   = 'dark'; // namespace alert (dark or light)

  // Go to the top
  $('html, body').animate({ scrollTop: 0 }, 200);

  // Wait while page is scrolling
  setTimeout(function () {
    // if ($this.hasClass('page-alerts-clear-btn')) {
    //   return $('.px-content').pxBlockAlert('clear', $this.attr('data-namespace'));
    // }

    delete alert_content;

    alert_container.pxBlockAlert(alert_content, {
      type: alert_type,
      style: alert_style,
      namespace: alert_namespace,
      timer: alert_timer,
      content: alert_content
    });
  }, 300);
}
