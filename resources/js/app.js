/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
});



import { Calendar } from '@fullcalendar/core';
import deLocale from '@fullcalendar/core/locales/de';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';
import '@fullcalendar/core/main.css';
import '@fullcalendar/daygrid/main.css';
import '@fullcalendar/timegrid/main.css';
//import '@fullcalendar/list/main.css';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        plugins: [ timeGridPlugin, dayGridPlugin, interactionPlugin ],
        locale: deLocale,
        defaultView: window.screen.width < 768 ? 'timeGridDay' : 'timeGridWeek',
        height: 700,
        firstDay: 1,
        buttonText: {
            today: 'heute',
            month: 'Monatsansicht',
            week: 'Wochenansicht',
            day: 'Tagesansicht'
        },
        header: {
            left: 'title',
            center: 'prev next today month agendaWeek agendaDay',
            right: 'prevYear nextYear'
        },
        allDayText: 'ganzer Tag',
        minTime: '08:00:00',
        maxTime: '19:00:00',
        selectable: true,
        selectMirror: true,
        defaultAllDayEventDuration: {
            days: 1
        },
        events: '/getEvents',
        /*dateClick: function(start) {
            $("#NewEventModalCenter #start").val(start);
            $('#NewEventModalCenter').modal();
            $("#NewEventModalCenter #end").val(end.format('DD.MM.YYYY, H:mm'));
            $('#NewEventModalCenter').modal();
            $(function () {
                $('#datetimepickerStart').datetimepicker({
                    locale: 'de'
                });
                $('#datetimepickerEnd').datetimepicker({
                    locale: 'de'
                });
            });
            $('#NewEventModalCenter #allDay').click(function () {
                $(this).checked();
            });
        },*/
    });
    calendar.render();
});