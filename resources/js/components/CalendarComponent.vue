<template>
	<div>
		<FullCalendar v-bind:options="calOptions"></FullCalendar>
        <new-event-modal :startDate="newStartDate" :startTime="newStartTime" :endDate="newEndDate" :endTime="newEndTime"></new-event-modal>
	</div>
</template>

<script>
	import FullCalendar from '@fullcalendar/vue'
	import dayGridPlugin from '@fullcalendar/daygrid'
	import timeGridPlugin from '@fullcalendar/timegrid'
	import interactionPlugin from '@fullcalendar/interaction'
	import swal from 'sweetalert'
    import NewEventModal from "./NewEventModal";

	export default {
		name: "CalendarComponent",
		components: {
			FullCalendar,
            NewEventModal
		},
		data() {
			return {
			    newStartDate: '',
                newStartTime: '',
                newEndDate: '',
                newEndTime: '',
				calOptions: {
					plugins: [ dayGridPlugin, timeGridPlugin, interactionPlugin ],
					locale: "de",
                    height: 'auto',
                    handleWindowResize: true,
                    stickyHeaderDates: true,
					initialView: window.screen.width < 768 ? 'timeGridDay' : 'timeGridWeek',
					events: "/getEvents",
					buttonText: {
						month: "Monat",
						week: "Woche",
						day: "Tag",
                        today: "heute",
					},
					headerToolbar: {
						left: 'prev,next today',
						center: 'title',
						right: 'dayGridMonth,timeGridWeek,timeGridDay'
					},
                    allDayText: 'ganzer Tag',
                    firstDay: 1,
                    slotMinTime: '08:00:00',
                    slotMaxTime: '19:00:00',
                    weekNumbers: true,
					editable: true,
					dayMaxEvents: true,
					dateClick: this.dateClick,
					eventClick: this.eventClick,
                    selectable: true,
                    selectMirror: true,
                    select: this.selectSlot,
				},
			}
		},
		methods: {
			dateClick(clickInfo) {
			    console.log(clickInfo)
			    const isodate = clickInfo.dateStr
                const date = isodate.split("T")
                const time = date[1].split("+")

                this.newStartDate = date[0]
                this.newStartTime = time[0]
                this.newEndDate = date[0]
                this.newEndTime = time[0]

                this.$bvModal.show('modal-newEvent')
			},
			eventClick(clickInfo) {
				console.log(clickInfo.event.start)
			},
            selectSlot(selectionInfo) {
                console.log(selectionInfo)
            }
		}
	}
</script>
