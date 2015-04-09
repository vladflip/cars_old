$ = require 'jquery'

module.exports = ->

# List class
	class List

		constructor: (id, dep) ->

			self = this

			@id = id
			@el = $ "##{id}"
			@dep = dep

			@el.on "change", ->
				if self.el.find('option:selected').val() isnt 'default'
					do self.refresh

		reset: ->
			@el.find 'option' 
				.remove()

		refresh: ->
			self = this
			unless not @dep?
				$.ajax
					url: "get-#{@dep.id}",
					data: make : @el.find('option:selected').val()
				.done (data) ->
					console.log data
					self.dep.set data
				
		set: (op) ->
			do @el.empty
			for make in op
				@el.append "<option value='#{make.name}'>#{make.name}</option>"


	specs = new List 'specs', 
			new List 'makes', 
			new List 'models'

	return