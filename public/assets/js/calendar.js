document.addEventListener("DOMContentLoaded", function () {
    $.ajax({
        type: "GET",
        url: "/get-costume-rent",
        success: function (data) {
            let date_now = new Date();
            let now = date_now.getFullYear();
            now += "-" + (+("0" + date_now.getMonth()).slice(-2) + 1);
            now += "-" + ("0" + date_now.getDate()).slice(-2);
            var calendarEl = document.getElementById("calendar");
            var calendar = new FullCalendar.Calendar(calendarEl, {
                views: {
                    dayGridMonth: {
                        titleFormat: {
                            month: "long",
                            year: "numeric",
                        },
                        dayHeaderFormat: {
                            weekday: "short",
                        },
                    },
                    dayGridWeek: {
                        titleFormat: {
                            month: "short",
                            year: "numeric",
                        },
                        dayHeaderFormat: {
                            weekday: "narrow",
                            day: "numeric",
                            month: "numeric",
                            omitCommas: "true",
                        },
                    },
                    dayGridDay: {
                        titleFormat: {
                            day: "numeric",
                            month: "short",
                            year: "numeric",
                        },
                    },
                },
                headerToolbar: {
                    left: "prev,next",
                    center: "title",
                    right: "today,dayGridMonth,dayGridWeek",
                },
                initialDate: now,
                locale: "id",
                navLinks: true, // can click day/week names to navigate views
                selectable: false,
                selectMirror: true,
                select: function (arg) {
                    var title = prompt("Event Title:");
                    console.log(arg.end.setDate(arg.start.getDate() + 3));
                    if (title) {
                        calendar.addEvent({
                            title: title,
                            start: arg.start,
                            end: arg.end,
                            allDay: arg.allDay,
                        });
                    }
                    calendar.unselect();
                },
                eventClick: function (arg) {
                    if (
                        confirm("Are you sure you want to delete this event?")
                    ) {
                        arg.event.remove();
                    }
                },
                editable: true,
                dayMaxEvents: false, // allow "more" link when too many events
                eventMaxStack: false,
                events: data.costume,
            });
            calendar.render();
        },
    });
});
