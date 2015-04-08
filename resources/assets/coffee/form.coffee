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
			unless @dep is null
				$.ajax
					url: "get-#{@dep.id}"
				.done (data) ->
					self.dep.set data
				
		set: (op) ->
			for make in op
				@el.append "<option value='#{make.name}'>#{make.name}</option>"


	specs = new List 'specs', 
			new List 'makes', 
			new List 'models'

	return