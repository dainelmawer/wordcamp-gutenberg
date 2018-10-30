( function( wp ) {

	const { RichText, AlignmentToolbar, BlockControls, InspectorControls } = wp.editor;
	const { SelectControl } = wp.components;
	const { createElement } = wp.element;
	const { registerBlockType } = wp.blocks;
	const { __ } = wp.i18n;

	registerBlockType( 'gutenworkshop/gutennotification', {

		title: __( 'Guten Notfication', 'gutenworkshop' ),
		icon: 'share-alt',
		category: 'widgets',
		supports: {
			html: false,
		},

		attributes: {
			content: {
				type: 'string',
				default: 'Editable block content...',
			},
			alignment: {
				type: 'string',
			},
			alertType: {
				type: 'string',
			}
		},

		edit: ( props ) => {

			const { content, alignment, focus } = props.attributes;

			const controls = [
				createElement(
					InspectorControls, {},
					createElement(
						SelectControl, {
							label: __( 'Change Alert Type', 'gutenworkshop' ),
							help: __( 'Allows you to choose a class to style the alert', 'gutenworkshop' ),
							onChange: ( newAlertType ) => {
								props.setAttributes({
									alertType: newAlertType
								})
							},
							options: [{
								value: 'default',
								label: 'Default'
							},
								{
									value: 'success',
									label: 'Success'
								},
								{
									value: 'danger',
									label: 'Danger'
								},
								{
									value: 'warning',
									label: 'Warning'
								},
							],
						}
					),
				),
			];

			return [
				controls,
				createElement(
					BlockControls, {
						key: 'controls'
					},
					createElement(
						AlignmentToolbar, {
							value: alignment,
							onChange: ( newAlignment ) => {
								props.setAttributes({
									alignment: newAlignment
								});
							}
						}
					)
				),

				createElement(
					RichText, {
						tagName: 'p',
						className: props.className + ' ' + props.attributes.alertType,
						value: content,
						onChange: ( updatedContent ) => {
							props.setAttributes({
								content: updatedContent
							});
						},
						style: {
							textAlign: alignment
						},
						focus: focus,
						onFocus: props.setFocus
					}
				)

			];

		},

		save: ( props ) => {

			const { content, alignment, alertType } = props.attributes;

			return createElement(
				'p', {
					className: props.className + ' ' + alertType,
					style: {
						textAlign: alignment
					},
				},
				content
			);
		}
	} );
} )(
	window.wp
);
