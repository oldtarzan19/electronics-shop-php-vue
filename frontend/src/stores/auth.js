import { defineStore } from 'pinia'
import api from '@/services/api.js'

export const useAuthStore = defineStore('auth', {
  state: () => ({
    user: null,
    loading: false,
  }),

  getters: {
    isAuthenticated: (state) => state.user !== null,
    isLoading: (state) => state.loading,
  },

  actions: {
    async login(credentials) {
      try {
        this.state.loading = true
        await api.post('/login', credentials)

        const response = await api.get('/me')
        this.user = response.data
      } catch (error) {
        console.error(error)
      } finally {
        this.state.loading = false
      }
    },

    async register(credentials) {
      try {
        this.loading = true

        const response = await api.post('/register', credentials)
        this.user = response.data.user
      } catch (error) {
        console.error(error.response?.data ?? error)
        throw error
      } finally {
        this.loading = false
      }
    },

    async fetchUser() {
      try {
        const response = await api.get('/me')
        this.user = response.data
      } catch (error) {
        this.user = null
      }
    },

    async logout() {
      await api.post('/logout')
      this.user = null
    },
  },
})
