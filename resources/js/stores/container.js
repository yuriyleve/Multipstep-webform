import { ref } from "vue";
import { defineStore } from "pinia";

export const useContainerStore = defineStore("container", () => {
    const initialState = {
        name: "",
        config: "",
        id: "",
        gtm_id: "",
        location: "",
        plan: "",
        billing_period: "",
        plan_autoupgrade: "",
        domain: "",
        subdomain: "",
    };

    const container = ref({ ...initialState });

    function update(value) {
        container.value = { ...container.value, ...value };
    }

    function reset() {
        container.value = { ...initialState };
    }

    return {
        container,
        update,
        reset,
    };
});
