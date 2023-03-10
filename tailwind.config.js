const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
const theme = {
    colors:
    {
        white: '#ffffff',
        black: '#000000',
        gray:
        {
            '25': '#fcfcfd',
            '50': '#f9fafb',
            '100': '#f2f4f7',
            '200': '#e4e7ec',
            '300': '#d0d5dd',
            '400': '#98a2b3',
            '500': '#667085',
            '600': '#475467',
            '700': '#344054',
            '800': '#1d2939',
            '900': '#101828'
        },
        primary:
        {
            '25': '#fcfaff',
            '50': '#f9f5ff',
            '100': '#f4ebff',
            '200': '#e9d7fe',
            '300': '#d6bbfb',
            '400': '#b692f6',
            '500': '#9e77ed',
            '600': '#7f56d9',
            '700': '#6941c6',
            '800': '#53389e',
            '900': '#42307d'
        },
        error:
        {
            '25': '#fffbfa',
            '50': '#fef3f2',
            '100': '#fee4e2',
            '200': '#fecdca',
            '300': '#fda29b',
            '400': '#f97066',
            '500': '#f04438',
            '600': '#d92d20',
            '700': '#b42318',
            '800': '#912018',
            '900': '#7a271a'
        },
        warning:
        {
            '25': '#fffcf5',
            '50': '#fffaeb',
            '100': '#fef0c7',
            '200': '#fedf89',
            '300': '#fec84b',
            '400': '#fdb022',
            '500': '#f79009',
            '600': '#dc6803',
            '700': '#b54708',
            '800': '#93370d',
            '900': '#7a2e0e'
        },
        success:
        {
            '25': '#f6fef9',
            '50': '#ecfdf3',
            '100': '#d1fadf',
            '200': '#a6f4c5',
            '300': '#6ce9a6',
            '400': '#32d583',
            '500': '#12b76a',
            '600': '#039855',
            '700': '#027a48',
            '800': '#05603a',
            '900': '#054f31'
        },
        blue:
        {
            gray:
            {
                '25': '#fcfcfd',
                '50': '#f8f9fc',
                '100': '#eaecf5',
                '200': '#c8cce5',
                '300': '#9ea5d1',
                '400': '#717bbc',
                '500': '#4e5ba6',
                '600': '#3e4784',
                '700': '#363f72',
                '800': '#293056',
                '900': '#101323'
            },
            light:
            {
                '25': '#f5fbff',
                '50': '#f0f9ff',
                '100': '#e0f2fe',
                '200': '#b9e6fe',
                '300': '#7cd4fd',
                '400': '#36bffa',
                '500': '#0ba5ec',
                '600': '#0086c9',
                '700': '#026aa2',
                '800': '#065986',
                '900': '#0b4a6f'
            },
            '25': '#f5faff',
            '50': '#eff8ff',
            '100': '#d1e9ff',
            '200': '#b2ddff',
            '300': '#84caff',
            '400': '#53b1fd',
            '500': '#2e90fa',
            '600': '#1570ef',
            '700': '#175cd3',
            '800': '#1849a9',
            '900': '#194185'
        },
        indigo:
        {
            '25': '#f5f8ff',
            '50': '#eef4ff',
            '100': '#e0eaff',
            '200': '#c7d7fe',
            '300': '#a4bcfd',
            '400': '#8098f9',
            '500': '#6172f3',
            '600': '#444ce7',
            '700': '#3538cd',
            '800': '#2d31a6',
            '900': '#2d3282'
        },
        purple:
        {
            '25': '#fafaff',
            '50': '#f4f3ff',
            '100': '#ebe9fe',
            '200': '#d9d6fe',
            '300': '#bdb4fe',
            '400': '#9b8afb',
            '500': '#7a5af8',
            '600': '#6938ef',
            '700': '#5925dc',
            '800': '#4a1fb8',
            '900': '#3e1c96'
        },
        pink:
        {
            '25': '#fef6fb',
            '50': '#fdf2fa',
            '100': '#fce7f6',
            '200': '#fcceee',
            '300': '#faa7e0',
            '400': '#f670c7',
            '500': '#ee46bc',
            '600': '#dd2590',
            '700': '#c11574',
            '800': '#9e165f',
            '900': '#851651'
        },
        rose:
        {
            '25': '#fff5f6',
            '50': '#fff1f3',
            '100': '#ffe4e8',
            '200': '#fecdd6',
            '300': '#fea3b4',
            '400': '#fd6f8e',
            '500': '#f63d68',
            '600': '#e31b54',
            '700': '#c01048',
            '800': '#a11043',
            '900': '#89123e'
        },
        orange:
        {
            '25': '#fffaf5',
            '50': '#fff6ed',
            '100': '#ffead5',
            '200': '#fddcab',
            '300': '#feb273',
            '400': '#fd853a',
            '500': '#fb6514',
            '600': '#ec4a0a',
            '700': '#c4320a',
            '800': '#9c2a10',
            '900': '#7e2410'
        },
        'avatar user square':
        {
            'Olivia Rhye (color background)': '#c7b9da',
            'Phoenix Baker (color background)': '#aa9c75',
            'Lana Steiner (color background)': '#d4b5ad',
            'Demi Wilkinson (color background)': '#bea887',
            'Candice Wu (color background)': '#a2a8cd',
            'Natali Craig (color background)': '#d1baa9',
            'Drew Cano (color background)': '#d1dfc3',
            'Orlando Diggs (color background)': '#cfc3a7',
            'Andi Lane (color background)': '#d2c7ac',
            'Kate Morrison (color background)': '#dbc0dd',
            'Koray Okumus (color background)': '#d4b2af',
            'Ava Wright (color background)': '#c9ba9c',
            'Eve Leroy (color background)': '#dab9bb',
            'Zahir Mays (color background)': '#c3c7df',
            'Joshua Wilson (color background)': '#d2dbbd',
            'Rene Wells (color background)': '#dfcc9f',
            'Lori Bryson (color background)': '#d9b9bb',
            'Anaiah Whitten (color background)': '#ccc0dd',
            'Noah Pierre (color background)': '#d4afbd',
            'Katherine Moss (color background)': '#a2a8cd',
            'Mollie Hall (color background)': '#cb9fa2',
            'Eduard Franze (color background)': '#dbd0bd',
            'Alec Whitten (color background)': '#abb677',
            'Eva Bond (color background)': '#dbc0dd',
            'Sophia Perez (color background)': '#b6cdd8',
            'Lyle Kauffman (color background)': '#d2b1ac',
            'Kelly Williams (color background)': '#d8c7b6',
            'Lucy Bond (color background)': '#dbc0dd',
            'Alisa Hester (color background)': '#d4afbd',
            'Rosalee Melvin (color background)': '#dbcabd',
            'Loki Bright (color background)': '#b9cfd0',
            'Aliah Lane (color background)': '#d7c0dd',
            'Anita Cruz (color background)': '#c2c7b8',
            'Kari Rasmussen (color background)': '#a9b58d',
            'Nala Goins (color background)': '#c0c6dd'
        }
    },
    fontSize:
    {
        xs: '0.75rem',
        sm: '0.875rem',
        base: '1rem',
        lg: '1.125rem',
        xl: '1.25rem',
        '2xl': '1.5rem',
        '3xl': '1.875rem',
        '4xl': '2.25rem',
        '5xl': '3rem',
        '6xl': '3.75rem',
        '7xl': '4.5rem'
    },
    fontFamily: {
        inter: 'Inter'
    },
    boxShadow:
    {
        'Focus ring/4px primary-100': '0px 0px 0px 4px rgba(244,235,255,1)',
        'Focus ring/4px grey-100': '0px 0px 0px 4px rgba(242,244,247,1)',
        'Focus ring/4px error-100': '0px 0px 0px 4px rgba(254,228,226,1)',
        'Focus ring / 4px grey-600': '0px 0px 0px 4px rgba(71,84,103,1)',
        'Focus ring / 4px primary-600': '0px 0px 0px 4px rgba(127,86,217,1)',
        'Shadow/xs': '0px 1px 2px 0px rgba(16,24,40,0.05)',
        'Shadow/xs focused 4px primary-100': '0px 0px 0px 4px rgba(244,235,255,1), 0px 1px 2px 0px rgba(16,24,40,0.05)',
        'Shadow/xs focused 4px grey-100': '0px 0px 0px 4px rgba(242,244,247,1), 0px 1px 2px 0px rgba(16,24,40,0.05)',
        'Shadow/xs focused 4px error-100': '0px 0px 0px 4px rgba(254,228,226,1), 0px 1px 2px 0px rgba(16,24,40,0.05)',
        'Shadow/sm': '0px 1px 2px 0px rgba(16,24,40,0.06), 0px 1px 3px 0px rgba(16,24,40,0.1)',
        'Shadow/sm focused 4px primary-100': '0px 0px 0px 4px rgba(244,235,255,1), 0px 1px 2px 0px rgba(16,24,40,0.06), 0px 1px 3px 0px rgba(16,24,40,0.1)',
        'Shadow/sm focused 4px grey-100': '0px 0px 0px 4px rgba(242,244,247,1), 0px 1px 2px 0px rgba(16,24,40,0.06), 0px 1px 3px 0px rgba(16,24,40,0.1)',
        'Shadow/md': '0px 2px 4px -2px rgba(16,24,40,0.06), 0px 4px 8px -2px rgba(16,24,40,0.1)',
        'Shadow/lg': '0px 4px 6px -2px rgba(16,24,40,0.05), 0px 12px 16px -4px rgba(16,24,40,0.1)',
        'Shadow/xl': '0px 8px 8px -4px rgba(16,24,40,0.04), 0px 20px 24px -4px rgba(16,24,40,0.1)',
        'Shadow/2xl': '0px 24px 48px -12px rgba(16,24,40,0.25)',
        'Shadow / 3xl': '0px 32px 64px -12px rgba(16,24,40,0.2)',
        'Shadow/Portfolio mockup/Main centre lg': '0px 100px 200px 0px rgba(52,64,84,0.18)',
        'Shadow/Portfolio mockup/Overlay right lg': '-100px 100px 150px 0px rgba(52,64,84,0.12)',
        'Shadow/Portfolio mockup/Overlay left lg': '100px 100px 150px 0px rgba(52,64,84,0.12)',
        'Shadow/Portfolio mockup/Grid shadow md': '32px 32px 64px 0px rgba(52,64,84,0.08)',
        'Background blur/sm': '',
        'Background blur/md': '',
        'Background blur / lg': '',
        'Background blur / xl': ''
    },
    borderRadius:
    {
        'none': '0',
        'xs': '0.03125rem',
        'sm': '0.04864433407783508rem',
        DEFAULT: '0.05342902988195419rem',
        'lg': '0.056618817150592804rem',
        'xl': '0.0625rem',
        '2xl': '0.06259781122207642rem',
        '3xl': '0.0833333358168602rem',
        '4xl': '0.09728866815567017rem',
        '5xl': '0.1041666716337204rem',
        '6xl': '0.10685805976390839rem',
        '7xl': '0.11323763430118561rem',
        '8xl': '0.11660447716712952rem',
        '9xl': '0.125rem',
        '10xl': '0.12519562244415283rem',
        '11xl': '0.146484375rem',
        '12xl': '0.151162788271904rem',
        '13xl': '0.1666666716337204rem',
        '14xl': '0.1748834252357483rem',
        '15xl': '0.1875rem',
        '16xl': '0.1973150074481964rem',
        '17xl': '0.19911029934883118rem',
        '18xl': '0.20469914376735687rem',
        '19xl': '0.20999209582805634rem',
        '20xl': '0.20999328792095184rem',
        '21xl': '0.210608571767807rem',
        '22xl': '0.21393442153930664rem',
        '23xl': '0.2151898741722107rem',
        '24xl': '0.21793310344219208rem',
        '25xl': '0.21906886994838715rem',
        '26xl': '0.22705696523189545rem',
        '27xl': '0.2375601828098297rem',
        '28xl': '0.2389240562915802rem',
        '29xl': '0.23971517384052277rem',
        '30xl': '0.24604429304599762rem',
        '31xl': '0.24690908193588257rem',
        '32xl': '0.25rem',
        '33xl': '0.2721518874168396rem',
        '34xl': '0.277777761220932rem',
        '35xl': '0.29695022106170654rem',
        '36xl': '0.3125rem',
        '37xl': '0.375rem',
        '38xl': '0.3792523443698883rem',
        '39xl': '0.39040514826774597rem',
        '40xl': '0.3925553858280182rem',
        '41xl': '0.39255863428115845rem',
        '42xl': '0.3931660056114197rem',
        '43xl': '0.421875rem',
        '44xl': '0.4375rem',
        '45xl': '0.4430379867553711rem',
        '46xl': '0.453125rem',
        '47xl': '0.4534883499145508rem',
        '48xl': '0.5rem',
        '49xl': '0.555555522441864rem',
        '50xl': '0.5569852590560913rem',
        '51xl': '0.5625rem',
        '52xl': '0.5830223560333252rem',
        '53xl': '0.625rem',
        '54xl': '0.6323529481887817rem',
        '55xl': '0.6666666865348816rem',
        '56xl': '0.6875rem',
        '57xl': '0.75rem',
        '58xl': '0.793367326259613rem',
        '59xl': '0.800000011920929rem',
        '60xl': '0.8333332538604736rem',
        '61xl': '0.833333432674408rem',
        '62xl': '0.8616728186607361rem',
        '63xl': '0.875rem',
        '64xl': '0.9005482792854309rem',
        '65xl': '0.9221615195274353rem',
        '66xl': '0.9599999785423279rem',
        '67xl': '1rem',
        '68xl': '1.0546875rem',
        '69xl': '1.0625rem',
        '70xl': '1.111111044883728rem',
        '71xl': '1.125rem',
        '72xl': '1.25rem',
        '73xl': '1.375rem',
        '74xl': '1.5rem',
        '75xl': '1.75rem',
        '76xl': '1.9375rem',
        '77xl': '2rem',
        '78xl': '2.25rem',
        '79xl': '2.375rem',
        '80xl': '2.5rem',
        '81xl': '2.75rem',
        '82xl': '3.5rem',
        '83xl': '3.648324966430664rem',
        '84xl': '4.007176876068115rem',
        '85xl': '4.246411323547363rem',
        '86xl': '4.694835662841797rem',
        '87xl': '4.839731216430664rem',
        '88xl': '4.909090995788574rem',
        '89xl': '5.315770626068115rem',
        '90xl': '5.633129596710205rem',
        '91xl': '6rem',
        'full': '9999px'
    }
}
/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    theme: {
        extend: {
            fontSize: theme.fontSize,
            fontFamily: {
                sans: ['IBM Plex Sans'],
            },
            colors: {
                primary: theme.colors.primary,
                gray: theme.colors.gray,
                error: theme.colors.error,
                warning: theme.colors.warning,
                success: theme.colors.success,
                blue: theme.colors.blue,
                indigo: theme.colors.indigo,
                purple: theme.colors.purple,
                pink: theme.colors.pink,
                rose: theme.colors.rose,
                orange: theme.colors.orange,
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
