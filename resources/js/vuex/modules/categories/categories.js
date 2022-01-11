export default {
    state: {
        itens: {
            data: []
        },
    },
    mutations: {
        LOAD_CATEGORIES (state, categories) {
            state.itens = categories
        }
    },
    actions: {
        loadCategories (context) {
            axios("/api/v1/categories")
            .then((response) => {
            console.log(response);

            context.commit('LOAD_CATEGORIES', response)
            })
            .catch((error) => {
            console.log(error);
            })
        }
    },
    getters: {

    }
}
