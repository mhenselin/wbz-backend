<template>
    <div id="calNewEventModal">
        <form>
        <b-modal
            id="modal-newEvent"
            title="Neuen Termin anlegen"
            size="lg"
            ok-only
            centered
        >
            <b-container fluid>
                <section class="my-4 mx-3">
                    <b-form-input
                        v-model="title"
                        placeholder="Titel"
                        name="title"
                    ></b-form-input>
                </section>
                <section class="d-flex flex-row justify-content-start">
                    <div class="d-flex flex-column align-items-start">
                        <b-col>
                            <label for="start-datepicker">beginnt (Datum):</label>
                            <b-form-datepicker
                                id="start-datepicker"
                                v-model="startDateX"
                                class="mb-2"
                                locale="de"
                                name="startDateX"
                            ></b-form-datepicker>
                        </b-col>
                        <b-col>
                            <label for="start-timepicker">beginnt (Uhrzeit):</label>
                            <b-form-timepicker
                                id="start-timepicker"
                                v-model="startTimeX"
                                locale="de"
                                name="startTimeX"
                            ></b-form-timepicker>
                        </b-col>
                    </div>
                    <div class="d-flex flex-column align-items-start">
                        <b-col>
                            <label for="end-datepicker">endet (Datum):</label>
                            <b-form-datepicker
                                id="end-datepicker"
                                v-model="endDateX"
                                class="mb-2"
                                locale="de"
                                name="endDateX"
                            ></b-form-datepicker>
                        </b-col>
                        <b-col>
                            <label for="end-timepicker">endet (Uhrzeit):</label>
                            <b-form-timepicker
                                id="end-timepicker"
                                v-model="endTimeX"
                                locale="de"
                                name="endTimeX"
                            ></b-form-timepicker>
                        </b-col>
                    </div>
                </section>
                <b-form-checkbox
                    id="allDay"
                    v-model="status"
                    class="my-4 mx-3"
                    name="allDay"
                >
                    ganzer Tag
                </b-form-checkbox>
                <section class="my-4 mx-3">
                    <b-form-input
                        v-model="desc"
                        placeholder="Beschreibung (optional)"
                        name="desc"
                    ></b-form-input>
                </section>
            </b-container>
            <template v-slot:modal-footer>
                <div class="w-100">
                    <b-button
                        variant="primary"
                        class="float-right"
                        type="submit"
                        name="submit_new"
                        @click.prevent="addNewEvent()"
                    >
                        Speichern
                    </b-button>
                </div>
            </template>
        </b-modal>
        </form>
    </div>
</template>

<script>
    export default {
        name: "NewEventModal",
        data() {
            return {
                title: '',
                status: '',
                desc: '',
				startDateX: '',
				startTimeX: '',
				endDateX: '',
				endTimeX: '',
            }
        },
		mounted() {
			this.$root.$on('bv::modal::show', (bvEvent, modalId) => {
				this.startDateX = this.$parent.newStartDate
				this.startTimeX = this.$parent.newStartTime
				this.endDateX = this.$parent.newEndDate
				this.endTimeX = this.$parent.newEndTime
			})
		},
        methods: {
            addNewEvent () {
                axios.post(
                	'/newEvent',{
                		'title': this.title,
						'startDate': this.startDateX
					})
					.then(response => {
						console.log(response.data)
						this.$bvModal.hide('modal-newEvent')
					})
				.catch(err => {
                	console.log(err)
				})
            }
        }
    }
</script>
