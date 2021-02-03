import BaseInput from '@jscomponents_admin/Inputs/BaseInput.vue'
import BaseCheckbox from '@jscomponents_admin/Inputs/BaseCheckbox.vue'
import BaseRadio from '@jscomponents_admin/Inputs/BaseRadio.vue'
import BaseDropdown from '@jscomponents_admin/BaseDropdown.vue'
import Card from '@jscomponents_admin/Cards/Card.vue'

/**
 * You can register global components here and use them as a plugin in your main Vue instance
 */

const GlobalComponents = {
  install (Vue) {
    Vue.component(BaseInput.name, BaseInput)
    Vue.component(BaseCheckbox.name, BaseCheckbox)
    Vue.component(BaseRadio.name, BaseRadio)
    Vue.component(BaseDropdown.name, BaseDropdown)
    Vue.component('card', Card)
  }
}

export default GlobalComponents
