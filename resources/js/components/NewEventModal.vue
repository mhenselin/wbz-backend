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
                                v-model="startDate"
                                class="mb-2"
                                locale="de"
                                name="startDate"
                            ></b-form-datepicker>
                        </b-col>
                        <b-col>
                            <label for="start-timepicker">beginnt (Uhrzeit):</label>
                            <b-form-timepicker
                                id="start-timepicker"
                                v-model="startTime"
                                locale="de"
                                name="startTime"
                            ></b-form-timepicker>
                        </b-col>
                    </div>
                    <div class="d-flex flex-column align-items-start">
                        <b-col>
                            <label for="start-datepicker">endet (Datum):</label>
                            <b-form-datepicker
                                id="start-datepicker"
                                v-model="endDate"
                                class="mb-2"
                                locale="de"
                                name="endDate"
                            ></b-form-datepicker>
                        </b-col>
                        <b-col>
                            <label for="start-timepicker">endet (Uhrzeit):</label>
                            <b-form-timepicker
                                id="start-timepicker"
                                v-model="endTime"
                                locale="de"
                                name="endTime"
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
        props: [
            'startDate', 'startTime', 'endDate', 'endTime'
        ],
        data() {
            return {
                title: '',
                status: '',
                desc: ''
            }
        },
        methods: {
            addNewEvent () {
                axios.post('/newEvent', this.title).then(response => this.$bvModal.hide('modal-newEvent'))
            }
        }
    }
</script>
