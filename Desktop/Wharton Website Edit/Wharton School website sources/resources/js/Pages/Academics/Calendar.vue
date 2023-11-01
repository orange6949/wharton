<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Calendar</h3>
            <img src="/img/subVisual01.jpg" alt="">
        </div>

        <div class="subContent area-calendar">
            <div class="wrap">
                <div class="labels">
                    <div class="label" v-for="(schedule, index) in schedules.data" :key="schedule.id">
                        <div class="color" :style="`background-color:${colors[index % colors.length]}`"></div>
                        <h3 class="title">{{schedule.title}}</h3>
                    </div>
                </div>

                <div id="calendar" ref="calendar"></div>
            </div>
        </div>
    </div>
</template>
<style>

</style>
<script>
export default {
    data(){
        return {
            colors : ["#9D1E2F", "#382721", "#EB2D46", "#0B3B52", "#9E9A2E"],
            schedules: this.$page.props.schedules,
            form: this.$inertia.form({
                date: this.$page.props.date
            })
        }
    },

    mounted(){
        AOS.init();

        this.renderCalendar();
    },

    methods: {
        onChangeDate(data){
            if(this.form.date !== moment(data.startStr).format("Y-MM-DD")){
                this.form.date = moment(data.startStr).format("Y-MM-DD");

                this.form.get("/academics/calendar", {
                    preserveScroll: true,
                    preserveState: true,
                    onSuccess:(page) => {
                        this.schedules = page.props.schedules;

                        this.renderCalendar();
                    }
                });
            }

        },

        renderCalendar(){

            let self = this;

            let calendarEl = this.$refs.calendar;

            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: self.form.date,
                timeZone: 'America/New_York',
                showNonCurrentDates: false,
                hiddenDays: [ 0,6 ],
                events: self.schedules.data.map((schedule, index) => {
                    return {
                        ...schedule,
                        backgroundColor: self.colors[index % self.colors.length]
                    }
                }),
                datesSet: self.onChangeDate
            });

            calendar.render();
        }
    }
}
</script>
