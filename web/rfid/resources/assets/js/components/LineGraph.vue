<template>
    <div>
        <canvas ref="chart" height="200"></canvas>
    </div>
</template>

<script>
    export default {
        props: ['x', 'y', 'label', 'color'],

        mounted() {
            this.chart = new Chart(this.$refs.chart, {
                type: 'line',
                data: {
                    labels: this.x,
                    datasets: [{
                        label: this.label,
                        borderColor: 'rgba(' + this.color + ', 0.8)',
                        backgroundColor: 'rgba(' + this.color + ', 0.4)',
                        data: this.y,
                    }],
                }
            });
        },

        data() {
            return {
                chart: '',
            }
        }
    }
</script>
