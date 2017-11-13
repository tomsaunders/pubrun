
//TODO typescript
var app = {
    $attend: null,
    $potential: null,
    init: function () {
        app.$attend = $('#attendees tbody');
        app.$potential = $('#potential tbody');
        app.$start = $('#start');
        app.$timer = $('#timer').hide();
        $.get('./runners.json', function (runners) {
            app.renderRunners(runners);
        })
        app.addListeners()
    },
    renderRunners: function (runners) {
        runners.map(function (runner) {
            runner.result = runner.result.sort(function (a, b) {
                a = new Date(a.result_set.result_date);
                b = new Date(b.result_set.result_date);
                return a > b ? -1 : 1;
            });
            runner.latest = new Date(runner.result[0].result_set.result_date);
            return runner;
        }).sort(function (a, b) {
            if (a.latest.valueOf() == b.latest.valueOf()) {
                return a.surname > b.surname ? 1 : -1;
            }
            return a.latest > b.latest ? -1 : 1;
        }).map(app.addRunner);
    },
    addRunner: function (runner) {
        var initials = runner.first_name[0] + runner.surname[0];
        var name = runner.first_name + " " + runner.surname;
        var last = app.formatDate(runner.latest);
        var row = "<tr><td class='avatar'><div>" + initials + "</div></td>";
        row += "<td><span class='name'>" + name + "</span><span class='last_ran'>" + last + "</span></td>";
        row += "<td class='action'><a class='btn btn-default add' href='#' role='button'>Add</a>";
        row += "<a class='btn btn-default remove' href='#' role='button'>Remove</a>";
        row += "<a class='btn btn-default stop' href='#' role='button'>Finish</a></td></tr>";
        app.$potential.append(row);
        return runner;
    },
    addListeners: function () {
        app.$potential.on('click', 'td.action .btn.add', function (e) {
            var $row = $(e.target).parent().parent().detach();
            app.$attend.append($row);
        });
        app.$attend.on('click', 'td.action .btn.remove', function (e) {
            var $row = $(e.target).parent().parent().detach();
            app.$potential.append($row);
        }).on('click', 'td.action .btn.stop', function (e) {
            var time = app.time();
            $(e.target).parent().empty().data('time', time).text(app.timeStr(time));
        })
        app.$start.on('click', function () {
            app.$potential.parent().hide();
            app.$attend.addClass('started');
            app.$start.hide();
            app.$timer.show();
            app.start = new Date();
            setInterval(app.timer, 500);
        });
    },
    time: function () {
        var now = new Date();
        var diff = Math.floor((now - app.start) / 1000);
        return {
            min: Math.floor(diff / 60),
            sec: diff % 60
        }
    },
    timeStr: function (time) {
        if (time.sec < 10) {
            time.sec = "0" + time.sec;
        }
        return time.min + ":" + time.sec;
    },
    timer: function () {
        app.$timer.text(app.timeStr(app.time()));
    },
    formatDate: function (date) {
        var now = new Date();
        var str = date.toDateString(); //Wed 01 Nov 2017
        var bits = str.split(" ");
        var end = 3;
        if (now.getFullYear() !== date.getFullYear()) {
            end++;
        }

        return bits.slice(1, end).join(" ");
    }
}
$(document).ready(app.init);