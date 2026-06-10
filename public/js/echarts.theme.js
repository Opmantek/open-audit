var lightTheme = {
    color: ['#1F284F', '#4A3165', '#7A3671', '#A83A71', '#D14565', '#Ef5c51', '#FF7E35', '#FFA600'],
    backgroundColor: '#FFFFFF',
    title: {
        textStyle: {
            color: '#404040'
        },
        subtextStyle: {
            color: '#404040'
        }
    },
    legend: {
        textStyle: {
            color: '#404040'
        }
    }
};

var darkTheme = {
    color: ['#2162F6', '#50ACF0', '#BA7DF0', '#8462FA', '#BC1EF0','#DF82FA', '#F3A8E8','#FF928C','#FF5465', '#FFAC81'],
    backgroundColor: '#222222',
    title: {
        textStyle: {
            color: '#FFFFFF'
        },
        subtextStyle: {
            color: '#FFFFFF'
        }
    },
    legend: {
        textStyle: {
            color: '#FFFFFF'
        }
    }
};

echarts.registerTheme('light', lightTheme);
echarts.registerTheme('dark', darkTheme);

window.echartsTheme = 'light';

if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    window.echartsTheme = 'dark';
}