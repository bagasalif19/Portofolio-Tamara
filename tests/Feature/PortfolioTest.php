<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test portfolio home page loads successfully with Tamara Hanum's information.
     */
    public function test_portfolio_page_loads_successfully(): void
    {
        $response = $this->get(route('portfolio.index'));

        $response->assertStatus(200);
        $response->assertSee('Tamara Hanum Ulinnuha, S.T.');
        $response->assertSee('PT Shoenary Javanesia Inc');
        $response->assertSee('Value Stream Mapping &amp; Kaizen Line Balancing Optimization', false);
    }

    /**
     * Test contact message submission succeeds with valid data.
     */
    public function test_contact_message_can_be_submitted_successfully(): void
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Manufacturing Consultation Inquiry',
            'message' => 'Hello Tamara, I would love to discuss a Lean production project with you.',
        ];

        $response = $this->post(route('portfolio.contact'), $data);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contact_messages', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Manufacturing Consultation Inquiry',
        ]);
    }

    /**
     * Test contact message validation fails when required fields are missing.
     */
    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->post(route('portfolio.contact'), []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
        $this->assertDatabaseCount('contact_messages', 0);
    }
}
